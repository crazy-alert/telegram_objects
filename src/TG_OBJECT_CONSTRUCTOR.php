<?php declare(strict_types=1);

namespace Parser;

use ReflectionClass;


trait TG_OBJECT_CONSTRUCTOR
{
	public function __construct(array $input) {
		
		$reflectClass = new ReflectionClass($this);
		$Class_name = $reflectClass->getName();
//		echo 'создаём ', $Class_name, N;
		$Class_nameSpace = $reflectClass->getNamespaceName();
		
		$ArrayOfObjects = [
			'entities' => 'MessageEntity',
			'photo' => 'PhotoSize',
			'caption_entities' => 'MessageEntity',
			'new_chat_members' => 'User',
			'new_chat_photo' => 'PhotoSize',
			'options' => 'PollOption',
			'explanation_entities' => 'MessageEntity',
			'users' => 'User',
		];
		$ArrayOfString = ['active_usernames'];
		$ArrayOfInt = ['option_ids'];
		$ArrayOfArrayOfObjects = [
			'keyboard' => 'KeyboardButton',
			'inline_keyboard' => 'InlineKeyboardButton',
		];
		
		foreach($reflectClass->getProperties() as $property) {
			$propertyName = $property->name;
			$propertyType = $property->getType()->getName();
			
			if(str_ends_with($propertyType, 'int')){
				$this->$propertyName = isset($input[$propertyName]) ? (int)$input[$propertyName] : null;
			}
			elseif(str_ends_with($propertyType, 'string')){
				try {
					$this->$propertyName = isset($input[$propertyName]) ? (string)$input[$propertyName] : null;
				}
				catch(\Throwable $e) {
                    $u = '$propertyName: '.$propertyName;
                    \SendToModerator::Send([    '$input'=> $input,
                                            '$propertyName' => $propertyName,
                        ]);
				 	\ThrowableHandler::Use($e);
					exit(0);
				}
			}
			elseif(str_ends_with($propertyType, 'bool')){
				$this->$propertyName = isset($input[$propertyName]) ? (bool)$input[$propertyName] : null;
			}
			elseif(str_ends_with($propertyType, 'array')){
				
				if(array_key_exists($propertyName, $ArrayOfObjects)){
					$NameForCreate = $Class_nameSpace.'\\'.$ArrayOfObjects[$propertyName];
					
					if(class_exists($NameForCreate)){
						if(isset($input[$propertyName]) and is_array($input[$propertyName])){
							$array = [];
							foreach($input[$propertyName] as $value) {
								$array[] = new $NameForCreate($value);
							}
							$this->$propertyName = $array;
						}
						else{
							$this->$propertyName = null;
						}
						
					}
					else{
						echo 'class -> '.$NameForCreate.' НЕЛЬЗЯ создать'.PHP_EOL;
					}
				}
				elseif(array_key_exists($propertyName, $ArrayOfArrayOfObjects)){
//				 	D::Log($propertyType, '$propertyType');
//				 	D::Log($input[$propertyName], '$input[$propertyName]');
					
					$array = [];
					$NameForCreate = $Class_nameSpace.'\\'.$ArrayOfArrayOfObjects[$propertyName];

					if(class_exists($NameForCreate)){
						foreach($input[$propertyName] as $key => $value) {
							$subarray = [];
							foreach($value as $SubValue) {
								$subarray[] = new $NameForCreate($SubValue);
							}
							$array[] = $subarray;
						}
					}
					else{
						echo 'class -> '.$NameForCreate.' НЕЛЬЗЯ создать'.PHP_EOL;
					}
					
					$this->$propertyName = $array;
				}
				elseif(array_key_exists($propertyName, $ArrayOfString)){
					$this->$propertyName = (string)$input[$propertyName];
				}
				elseif(array_key_exists($propertyName, $ArrayOfInt)){
					$this->$propertyName = (int)$input[$propertyName];
				}

//				active_usernames	Array of String
//				entities	        Array of MessageEntity
//				photo	            Array of PhotoSize
//				caption_entities	Array of MessageEntity
//				new_chat_members	Array of User
//				new_chat_photo	    Array of PhotoSize
//				option_ids	        Array of Integer/
//				options	            Array of PollOption
//				explanation_entities	Array of MessageEntity
//				users	            Array of User
//				photos	            Array of Array of PhotoSize
//				keyboard	        Array of Array of KeyboardButton
//				inline_keyboard	    Array of Array of InlineKeyboardButton

//				$this->$propertyName = isset($input[$propertyName]) ? (bool)$input[$propertyName] : null;
			}
			elseif(class_exists($propertyType)){
				
				$ReflectionClass = new ReflectionClass($propertyType);
				if($ReflectionClass->isInstantiable()){
					$NameForCreate = $ReflectionClass->getName();
					$this->$propertyName = isset($input[$propertyName]) ? new $NameForCreate($input[$propertyName]) : null;
				}
				else{
					echo 'class -> '.$propertyName.' НЕЛЬЗЯ создать'.PHP_EOL;
				}
			}
			else{
				
				echo 'Type -> '.$propertyName.' is uncnown'.PHP_EOL;
			}
			
		}
		
	}

    public function ToArray(): array {
        $array = get_object_vars($this);
        $return = [];
        foreach($array as $item => $value) {
            $return[$item] = $value;
        }
        return $return;
    }

    public function __get($name) {
        return isset($this->$name) ? $this->$name : null;

    }
}
<?php declare(strict_types=1);

namespace Parser;

/**
 * MaskPosition Этот объект описывает положение на лицах, где по умолчанию должна быть размещена маска.
 *
 * @package Parser
 *
 * @property-read string $pointThe часть лица, относительно которой следует разместить маску. Одно из «forehead» - лоба, «eyes» - глаз, «mouth» -рта или «chin» - подбородка.
 * @property-read float $x_shift    Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @property-read float $y_shift Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @property-read float $scale    ask scaling coefficient. For example, 2.0 means double size.
 *
 */
readonly class MaskPosition
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $pointThe;
	public float $x_shift;
	public float $y_shift;
	public float $scale;
	
	
}
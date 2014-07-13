<?php

namespace WCM\AstroFields\Settings\Templates;

use WCM\AstroFields\Core\Templates\TemplateInterface;

class TableCell implements TemplateInterface
{
	/** @type \SplPriorityQueue */
	private $entities;

	/**
	 * Attach the entities
	 * @param \SplPriorityQueue $entities
	 * @return $this
	 */
	public function attach( $entities )
	{
		$this->entities = $entities;

		return $this;
	}

	/**
	 * Render the Entities
	 * @return string
	 */
	public function display()
	{
		foreach( $this->entities as $entity )
		{
			?>
			<td>
				<?php
				$this->entities
					->current()
					->notify();
				?>
			</td>
			<?php
		}
	}
}
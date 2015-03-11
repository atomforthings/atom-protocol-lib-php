<?php

namespace Atom\Protocol\Command;

/**
 * Atom Connect Command
 *
 * Implementation of Connect Command
 *
 * @author     Neeraj Kumar <hello@neerajkumar.name>
 * @copyright  2015 Neeraj Kumar
 * @license    http://opensource.org/licenses/MIT  MIT License
 * 
 */
class SubscribeCommand extends AbstractCommand  {

	/**
	 * @property constant VALUE binary value of Connect Command
	 */
	const VALUE = 0b0011;

	public function __construct() {
		parent::__construct();
	}

}
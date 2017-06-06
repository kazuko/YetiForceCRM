<?php

/**
 * Chat Entries Action Class
 * @package YetiForce.Action
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Chat_Entries_Action extends Vtiger_Action_Controller
{

	/**
	 * Check permission
	 * @param \App\Request $request
	 * @throws \Exception\NoPermittedToRecord
	 */
	public function checkPermission(\App\Request $request)
	{
		if (!App\Privilege::isPermitted($request->getModule())) {
			throw new \Exception\NoPermittedToRecord('LBL_PERMISSION_DENIED');
		}
	}

	/**
	 * Constructor with a list of allowed methods 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->exposeMethod('get');
		$this->exposeMethod('add');
	}

	public function process(\App\Request $request)
	{
		$mode = $request->get('mode');
		if (!empty($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}
	}

	/**
	 * Get entries function
	 * @param \App\Request $request
	 */
	public function get(\App\Request $request)
	{
		
	}

	/**
	 * Add entries function
	 * @param \App\Request $request
	 */
	public function add(\App\Request $request)
	{
		
	}
}
<?php
namespace Dkocian\Events\Form;
/**
 *
 * @author Dalibor Kocian
 */
class Form extends \Nette\Object{
	/**
	 *
	 * @var \Nette\Application\UI\Form 
	 */
	protected $form;
	
	public function __construct(\Nette\Application\UI\Form $form){
		$this->setForm($form);
	}
	
	public function setForm(\Nette\Application\UI\Form $form){
		$this->form = $form;
	}
	
	public function getForm(){
		return $this->form;
	}



}
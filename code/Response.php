<?php
namespace Quaff\Responses\HTML;

class Response extends \Quaff\Responses\OK {
	
	public function isError()
	{
		return $this->getResultMessage() == static::GenericOKMessage;
	}
	
	public function getItemCount()
	{
		return $this->items()->count();
	}
	
	public function getStartIndex()
	{
		return 0;
	}
	
	public function getVersion()
	{
		return "1.1";
	}
}
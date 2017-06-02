<?php
class IFException extends Exception 
{
  public function __construct($message, $code = 0, Exception $pre_ex = null)
  {
    parent::__construct($message, $code, $pre_ex);
  }

  /*
  public function __toString()
  {
    
  }
  */
}

class InputTypeException extends IFException 
{
}

class DataBaseException extends IFException
{
}
<?php

/**
  * @author Amjad Iqbal
  * @author Amjad Iqbal <contact@amjadiqbal.me>
  */
  
namespace AmjadIqbal\Alertify\Storage;

interface SessionStore
{
    /**
     * Flash some data into the session.
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data);
}

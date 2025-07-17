<?php

/**
  * @author Amjad Iqbal
  * @author Amjad Iqbal <contact@amjadiqbal.me>
  */
  
if (!function_exists('alert')) {
    /**
     * Return app instance of Alert.
     *
     * @return AmjadIqbal\Alertify\Core\Toaster
     */

    function alert($data = array())
    {
        $alertify = app('alert');
        if (!empty($data['title'])) {
            return $alertify->alert($data);
        }
        return $alertify;
    }

}


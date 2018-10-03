<?php
require_once './inc/TelevisionI.inc.php';
class Television implements TelevisionI {
    private $on;
    private $channel;
    private $volume;
    private $mute;

    public function __construct() {
        $this->on = isset ($_SESSION['on']) ? $_SESSION['on'] : TRUE;
        $this->channel = isset ($_SESSION['channel']) ? $_SESSION['channel'] : 1;
        $this->volume = isset ($_SESSION['volume']) ? $_SESSION['volume'] : 10;
        $this->mute = isset ($_SESSION['mute']) ? $_SESSION['mute'] : FALSE;
    }

    public function getTvOnOff() {
        return $this->on;
    }

    public function tvOnOff() {
        $this->on = $this->on ? FALSE : TRUE;
        $this->saveState();
    }

    public function getChannel() {
        return $this->channel;
    }

    public function chUp() {
        $this->channel++;
        $this->saveState();
    }

    public function chDown() {
        $this->channel--;
        $this->saveState();
    }

    public function getVolume() {
        return $this->volume;
    }

    public function volUp() {
        $this->volume++;
        $this->saveState();
    }

    public function volDown() {
        $this->volume--;
        $this->saveState();
    }

    public function getMute() {
        return $this->mute;
    }

    public function mute() {
        $this->mute = $this->mute ? FALSE : TRUE;
        $this->saveState();
    }

    private function saveState() {
        $_SESSION['on'] = $this->getTvOnOff();
        $_SESSION['channel'] = $this->getChannel();
        $_SESSION['volume'] = $this->getVolume();
        $_SESSION['mute'] = $this->getMute();
    }


}

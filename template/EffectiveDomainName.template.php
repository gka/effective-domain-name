<?php

class EffectiveDomainName {

	public static function get($hostname) {
		$parts = explode('.', $hostname);
		if (count($parts) < 2) return $hostname;
		$i = count($parts)-1;
		$is_etld = true;
		while ($is_etld && $i-- > 0) {
			$p = implode('.', array_slice($parts, $i));
			$is_etld = isset(self::$effective_tlds[$p]);
		}
		return $p;
	}

	private static $effective_tlds = E_TLDS;

}
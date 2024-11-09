<?php

/**
 *
 *  helper function that returns the current date/time
 *
 * @var OPTIONAL:string $rt Return type either: string|object
 *
 * @return mixed
 */
function UTC_Now($rt = 'string')
{
	$dtz = new DateTimeZone("UTC");
	$now = new DateTime(date("c"), $dtz);
	if ($rt == 'object') {
		return $now;
	}
	return $now->format("Y-m-d H:i:s");
}

/**
 *
 * returns the date/time X number of days from NOW or the datetime you supplied
 * Can return as a string or DateTime Object based on 2nd parameter
 *
 * @param int $days
 *
 * @param string $rt
 *
 * @param DateTime $startDate
 *
 * @return mixed
 */

function addDays( int $days, $rt = 'string', DateTime $startDate = null)
{
	if (empty($startDate))
	{
		$startDate = UTC_Now('object');
	}
	$startDate->modify('+' .$days .'days');

	if ($rt == 'object')
	{
		return $startDate;
	}
	return $startDate->format("Y-m-d H:i:s");
}

/**
 *
 * returns the date/time going backward the number of days from NOW or the datetime you supplied
 * Can return as a string or DateTime Object based on 2nd parameter
 *
 * @param int $days
 *
 * @param string $rt
 *
 * @param DateTime $startDate
 *
 * @return mixed
 */

function subtractDays(int $days, $rt = 'string', DateTime $startDate = null)
{
	if (empty($startDate)) {
		$startDate = UTC_Now('object');
	}
	$startDate->modify('-' . $days . 'days');

	if ($rt == 'object') {
		return $startDate;
	}
	return $startDate->format("Y-m-d H:i:s");
}


/**
 *  validates if the supplied string is truthy. through optional 2nd param
 *  the function permits checks against an additional value(s).
 *   Supply as a string
 *
 * @param string  $string
 *
 * @param string $addValue OPTIONAL
 *
 * @return boolean DEFAULTS FALSE
 */
function to_boolean($string, string $addValue = null) {
    // convert to lowercase string
    $string = strtolower(strval($string));
    if ($addValue === null) {
        $truthy = ['true', 'on', 't', 'yes', 'y', '1'];
    } else {
        $truthy = ['true', 'on', 't', 'yes', 'y', '1', $addValue];
    }

    return (in_array($string, $truthy));
}

/**
 * Determines is supplied item is null, empty, or empty string.
 * A string with a space is NOT considered blank, if want to ignore
 * spaces, trim before sending to function.
 *
 * @param $thing
 *
 * @return boolean
 */
function is_blank($thing)
{
// This function should be be expanded on as needed.
//   will throw error if supplied a type that is not handled

	if ($thing === null || !isset($thing)) {
		return true;
	}

	switch (gettype($thing)) {
		case 'string':
			if (strlen($thing) == 0) return true;
			break;

		case 'array':
			if (count($thing) == 0) return true;
			break;


		default:
			throw new Exception('Unknown Type Provided');

	return false;
	}
}

/**
 * Converts Seconds to Hours:Minutes.
 *
 * @param $seconds : Integer
 *
 * @return time(hours:minutes);
 */
function to_time_format($seconds)
{
		// This function should be be expanded on as needed.
		// will throw error if supplied a type that is not handled
    $date = new DateTime();
    if ($seconds === null || !isset($seconds)) {
        return $date->format('i:s');
    }
    $converted = gmdate("H:i:s", $seconds);
    $hour = intval( explode(':', $converted)[0] );
    $minutes = intval( explode(':', $converted)[1] );
    $seconds = explode(':', $converted)[2];
    $hour = ($hour > 0) ? $hour.'' : '';
    $time = !is_blank($hour) ? $hour.'h '.$minutes.'m' : $minutes.'m';
    return $time;
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function make_string_safe($string)
{
	return trim(strtolower($string));
}

function toCurrency($value, string $locale = 'en-US')
{
	$money = new NumberFormatter($locale, NumberFormatter::CURRENCY);
	return $money->formatCurrency(floatval($value), "USD");
}

/**
 * Converts Seconds to Minutes.
 *
 * @param $seconds : Integer
 *
 * @return time(minutes);
 */
function to_cst($datetime, $format) {
	// create old time
	$d = new \DateTime($datetime, new \DateTimeZone('UTC'));
	// convert to new tz
	$d->setTimezone(new \DateTimeZone('CST'));

	// output with new format
	return $d->format($format);
}

/**
 * to_utc
 * @description convert date timezone to UTC
 * @param String $datetime
 * @param String $format
 *
 * @return string
 */
function to_utc($datetime, $format) {
	// create old time
	$d = new \DateTime($datetime, new \DateTimeZone('UTC'));
	// convert to new tz
	$d->setTimezone(new \DateTimeZone('UTC'));

	// output with new format
	return $d->format($format);
}

function guid()
{
	return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
	mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535),
	mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535),
	mt_rand(0, 65535), mt_rand(0, 65535));
}

function validate_library($user_libraries, $library)
{
	$result = false;

	foreach ($user_libraries as $key => $lib) {
		if($result == false){
			if($lib["library"] == $library){
				$result = true;
			}
		}
	}

	return $result;
}

function pascal_to_snake_case($string)
{
	$string = str_replace(" ","",$string);
	return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $string));
}
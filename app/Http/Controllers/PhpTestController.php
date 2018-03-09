<?php

namespace App\Http\Controllers;

/**
*  PhpTestController
*/
class PhpTestController extends Controller
{

	/**
	 * 高程图
	 * @return result 返回组成的方块数量1*1
	 */
	public function getElevationMap()
	{
	}

	/**
	 * 匿名函数（Anonymous functions），也叫闭包函数（closures
	 *
	 */
	public function testCloser()
	{
		$b = $c = 1;
		$d = $s =2;
		$a = function($b, $c) use ($d, $s) {
			var_export([$d,$s]);
		};
		$a(2,4);
		echo preg_replace_callback('~-([a-z])~', function ($match) {
		    return strtoupper($match[1]);
		}, 'hello-world');
	}
	/**
	 * 大狗和小狗总共49只，小狗比大狗多35只，大狗多少只？小狗多少只？
	 * 
	 **/
	public function getDogNum()
	{
		$s = $b = 0;
		for ($s=35; $s <=49 ; $s++) { 
			for ($b=0; $b <=14; $b++) {
				if($s + $b == 49 && $s - $b == 35) {
					return [
						's' => $s,
						'b' => $b,
					]; 
				}
			}
		}
	}
}
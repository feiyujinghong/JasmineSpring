<?php
/**
 * 求水仙花数
 */
class NarcissusNumber{

	/**
	 * 定义最大水仙花数的位数
	 * @var int
	 */
	private $_maxDecimal;

	/**
	 * 定义最小水仙花数的位数
	 * @var int
	 */
	private $_minDecimal;

	/**
	 * [$_resulrNumber 求出的水仙花数数组]
	 * @var array
	 */
	private $_resulrNumber = array();

	/**
	 * @dateTime 2017-03-24
	 * @since    1.0
	 * @param  	$minDecimal 水仙花数最小位数
	 * @param   $maxDecimal 水仙花数最大位数
	 */
	public function setDecimal($minDecimal,$maxDecimal){
		$this->_maxDecimal = $maxDecimal;
		$this->_minDecimal = $minDecimal;
	}
	/**
	 * 用于计算水仙花数
	 * @dateTime 2017-03-24
	 * @since    1.0
	 */
	public function main(){
		$maxNum = pow(10,$this->_maxDecimal);

		$minNum = pow(10,$this->_minDecimal-1);

		while($minNum <= $maxNum){
			//临时计算值，用于和当前数进行比较
			$temp = 0;
			//将当前数值分割为数组
			$arr  = str_split($minNum,1);
			foreach($arr as $val){
				$temp += pow($val,count($arr));
			}
			if($temp == $minNum){
				$this->_resulrNumber[] = $minNum;
			}
			$minNum ++;
		}
	}
	/**
	 * 获取求得的水仙花数
	 * @dateTime 2017-03-24
	 * @since    1.0
	 * @return   [type]     [array]
	 */
	public function getResult(){
		return $this->_resulrNumber;
	}
}

$class = new NarcissusNumber();
$class->setDecimal(3,4);
$class->main();
$result = $class->getResult();
var_dump($result);

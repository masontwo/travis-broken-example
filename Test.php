<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(2 = 1 + 1);
  	}
}

?>
$ git add -A
$ git commit -m 'Testing Travis CI: fixing the build'
$ git push

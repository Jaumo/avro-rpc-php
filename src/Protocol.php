<?php

namespace Avro\;

use Avro\RPC\RpcProtocol;

class Protocol extends RpcProtocol {
  
  private $jsonProtocol =
<<<PROTO
null
PROTO;


  private $md5 = "I�����t>��0Y";
  
  public function getJsonProtocol() { return $this->jsonProtocol; }
  public function getMd5() { return $this->md5; }
  



  
}
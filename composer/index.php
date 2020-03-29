<?php
//引入文件自动加载文件
require './vendor/autoload.php';
 
 //----初级版----
//  use Endroid\QrCode\QrCode;

// $qrCode = new QrCode('来吧小宝贝,call我电话：13592227763');

// header('Content-Type: '.$qrCode->getContentType());
// echo $qrCode->writeString();
//-------高级版--------------------
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

// Create a basic QR code
$qrCode = new QrCode('你对象这个位置，我想牢牢做一辈子。--你亲爱的阿涛');
$qrCode->setSize(300);

// Set advanced options
$qrCode->setWriterByName('png');
$qrCode->setMargin(10);
$qrCode->setEncoding('UTF-8');
$qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
$qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
$qrCode->setLabel('我想大声告诉你~', 14, __DIR__.'./vendor/endroid/qr-code/assets/fonts/noto_sans.otf', LabelAlignment::CENTER());
$qrCode->setLogoPath(__DIR__.'./vendor/endroid/qr-code/assets/images/2.jpg');
$qrCode->setLogoSize(90, 90);
$qrCode->setRoundBlockSize(true);
$qrCode->setValidateResult(false);
$qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

// Directly output the QR code
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

// Save it to a file
$qrCode->writeFile(__DIR__.'/qrcode.png');

// Create a response object
$response = new QrCodeResponse($qrCode);


//使用curl类文件   进行请求发送
//实例化对象
//   $curl = new \xiaohigh\Curl;
  //调用方法 发送请求
//   $res = $curl->get('http://baidu.com');
//   echo $res;

// use Gregwar\Captcha\CaptchaBuilder;

// $builder = new CaptchaBuilder;
// $builder->build();

// header('Content-type: image/jpeg');//设置响应头信息
// $builder->output();

// 简单的分词功能
//引入自动加载文件
// include "./vendor/autoload.php";

//实例化对象
// $obj = new \xiaohigh\Pscws4\Pscws4;

//调用实现分词功能
// $res = $obj -> run('SCWS 是 Simple Chinese Word Segmentation 的首字母缩写（即：简易中文分词系统）。
// 这是一套基于词频词典的机械式中文分词引擎，它能将一整段的中文文本基本正确地切分成词。 词是中文的最小语素单位，但在书写时并不像英语会在词之间用空格分开， 所以如何准确并快速分词一直是中文分词的攻关难点。', 10);

//打印结果
// print_r($res);
 ?>

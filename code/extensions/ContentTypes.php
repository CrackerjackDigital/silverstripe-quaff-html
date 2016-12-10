<?php
namespace Quaff\HTML\Extensions;

if (!defined('QUAFF_RESPONSE_DEFAULT_HTML_DECODE_OPTIONS')) {
	define('QUAFF_RESPONSE_DEFAULT_HTML_DECODE_OPTIONS', LIBXML_COMPACT | LIBXML_NOERROR | LIBXML_NONET | LIBXML_NOWARNING | LIBXML_PARSEHUGE | LIBXML_PEDANTIC | LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOBLANKS);
}

class ContentType extends \Extension
{
	const ContentType = 'html';
	const DefaultDecodeOptions = QUAFF_RESPONSE_DEFAULT_HTML_DECODE_OPTIONS;
	
	private static $content_types = [
		'text/html'             => self::ContentType,
		'application/xhtml+xml' => self::ContentType,
	];
	
	private static $decode_options = [
		self::ContentType => self::DefaultDecodeOptions,
	];
	
}
<?php
namespace Quaff\Transports\Decoders;

/**
 * TODO COMPLETE AND TEST CODE COPY-PASTED FROM RESPONSE
 */
use Quaff\Exceptions\Transport as Exception;

trait html {
	
	/**
	 * Return provided text as an xml DOM Document.
	 *
	 * @return \DOMDocument
	 * @throws Exception
	 */
	public function decode($htmlString) {
		libxml_use_internal_errors(true);
		libxml_clear_errors();
		
		$doc = new \DOMDocument();
		if (!$doc->loadHTML($htmlString, $this->get_config_setting('decode_options', self::ContentTypeHTML))) {
			$message = "Failed to load document from response raw data";
			
			if ($error = libxml_get_last_error()) {
				$message .= ": '$error'";
			}
			throw new Exception($message);
		}
		$xpath = new \DOMXPath($doc);
		if ($itemPath = $this->endpoint->getItemPath()) {
			return $xpath->query($itemPath);
		} else {
			return $xpath->query('/');
		}
	}
}
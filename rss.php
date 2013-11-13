<?php

class RSS{
	public $title;
	public $url;
	public $date;
	public $items;
	
	function generate(){
		$rss = '<?xml version="1.0" encoding="UTF-8"?>
			<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
			<channel>
			<title>' . $this->title . '</title>
			<link>' . $this->url . '</link>
			<description>' . $this->description . '</description>
			<lastBuildDate>' . date('D, d M Y H:i:s O') . '</lastBuildDate>
			<language>es</language>';
		
		if( $this->items ){
			foreach( $this->items as $item ){
			
				$rss .= '<item>
							<title><![CDATA[' . $item->title . ']]></title>
							<link>' . $item->url . '</link>
							<pubDate>' . $item->date . '</pubDate>
							<category>' . $item->category . '</category>
							<content:encoded><![CDATA[' . $item->description . ']]></content:encoded>
						</item>';
			
			}
		}
			
		$rss .= '</channel></rss>';
		
		return str_replace("\t",'', $rss);	
	}
}

?>
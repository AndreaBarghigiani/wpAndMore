<?php
	/* 
	 * File: single.php
	 * Line: 21
	 * Reason: Rimosso per creare la mia personale stringa.
	 */ 
	printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('j F Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
?>
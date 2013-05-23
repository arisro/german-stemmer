GermanStemmer
==============

Takes a word and reduces it to its German stem using the Porter stemmer algorithm.

References:

	- http://snowball.tartarus.org/algorithms/porter/stemmer.html
 	- http://snowball.tartarus.org/algorithms/german/stemmer.html

Usage:
	$stem = GermanStemmer::stem($word);

NOTE: You must open this document as a UTF-8 file, or you'll override the accented forms.

# Random
PHP Class for generating random strings for number, letters, symbols etc


# How to Use? #


Call: `Random::make(25);`
Output: `Uue4X6Rpk3QxDibCTy28ZgOmjwtK9V`

Call: `Random::make(12, [
	        'symbols' => [
	            'letters' => [
	                'uppercase' => false,
	                'lowercase' => false
	            ],
	            'numbers' => true,
	            'symbols' => true
	        ],
	        'options' => [
	            'prefix' => true,
	            'uppercaseAll' => false
	        ],
	        'prefix' => '___',
	        'prefix_length' => 15
	    ])`

Output: `1e7de980b23b288___-)+!56@"_2<#[~>0^(38149.7*]/`
      

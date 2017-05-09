
A simple wrapper for Hyphenator.js. It automatically hyphenates texts.

## Requirements 

Yii2

## Usage 

Install this extension via composer:

    composer require user1007017/yii2-hyphenator

Register the widget in your view (do not echo it):
    
    use user1007017\hyphenator\Hyphenator;
   
    Hyphenator::widget([
        'language' => 'de',
        'pluginOptions' => [
            'minwordlength' => 4
        ]
    ]);


Add class="hyphenate" to the elements whose text should be hyphenated (children do inherit this setting). 
Hyphenation can be stopped by adding class="donthyphenate".

## GitHub 

https://github.com/user1007007/yii2-hyphenator

## To come 

Support for Hyphenator_Loader.js

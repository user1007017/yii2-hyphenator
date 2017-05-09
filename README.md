
A simple wrapper for Hyphenator.js. It automatically hyphenates texts.

## Requirements 

Yii2

## Usage 

Install this extension via composer:

        composer require user1007017/yii2-hyphenator

Register the widget in your view (do not echo it):

          use user1007017/yii2-hyphenator

          Hyphenator::widget([
                'language' => 'en',
                'pluginOptions' => [
                   'minwordlength' => 4
                ]
          ]);

Add class="hyphenate" to the elements whose text should be hyphenated (children do inherit this setting). Hyphenation can be stopped by adding class="donthyphenate".
GitHub 

https://github.com/drenty/yii2-hyphenator

## To come 

Support for Hyphenator_Loader.js

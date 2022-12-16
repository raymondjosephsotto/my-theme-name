<?php

namespace App\Fields\Modules;

use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Components\Gallery as GalleryComponent;
use App\Fields\Options\HtmlAttributes;

class Gallery {

	public static function getFields() {

		/**
         * [Module] - Gallery
         * @author Rich Staats <rich@secretstache.com>
         * @since 3.0.0
         * @todo Link to Team Snippet Code
         */
        $galleryModule = new FieldsBuilder('gallery', [
            'title'	=>	'Gallery'
        ]);

        $galleryModule

            ->addTab('Content')

                ->addFields(GalleryComponent::getFields())
                
            ->addTab('Options')
            
                ->addFields(HtmlAttributes::getFields());

		return $galleryModule;

	}

}
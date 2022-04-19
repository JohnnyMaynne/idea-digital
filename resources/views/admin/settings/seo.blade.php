@extends('twill::layouts.settings', [
    'disableContentFieldset' => true,
    'additionalFieldsets' => [
        ['fieldset' => 'home', 'label' => 'Home'],
        ['fieldset' => 'about-us', 'label' => 'About us'],
        ['fieldset' => 'blog', 'label' => 'Blog page'],
        ['fieldset' => 'contacts', 'label' => 'Contacts'],
    ]
])


@section('fieldsets')
    @formFieldset(['id' => 'home', 'title' => 'Home page', 'open' => false])
        @formField('input', [
            'name' => 'home_meta_title',
            'label' => 'Meta title',
        ])
        @formField('input', [
            'name' => 'home_meta_description',
            'label' => 'Meta description',
            'type' => 'textarea',
        ])
    @endformFieldset


    @formFieldset(['id' => 'about-us', 'title' => 'About us page', 'open' => false])
        @formField('input', [
            'name' => 'about_us_meta_title',
            'label' => 'Meta title',
        ])
        @formField('input', [
            'name' => 'about_us_meta_description',
            'label' => 'Meta description',
            'type' => 'textarea',
        ])
    @endformFieldset


    @formFieldset(['id' => 'blog', 'title' => 'Blog page', 'open' => false])
        @formField('input', [
            'name' => 'blog_meta_title',
            'label' => 'Meta title',
        ])
        @formField('input', [
            'name' => 'blog_meta_description',
            'label' => 'Meta description',
            'type' => 'textarea',
        ])
    @endformFieldset


    @formFieldset(['id' => 'contacts', 'title' => 'Contacts page', 'open' => false])
        @formField('input', [
            'name' => 'contacts_meta_title',
            'label' => 'Meta title',
        ])
        @formField('input', [
            'name' => 'contacts_meta_description',
            'label' => 'Meta description',
            'type' => 'textarea',
        ])
    @endformFieldset
@endsection

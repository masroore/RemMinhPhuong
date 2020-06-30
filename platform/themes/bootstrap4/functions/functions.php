<?php

register_page_template([
    'default' => 'Default'
]);

register_sidebar([
    'id' => 'second_sidebar',
    'name' => 'Second sidebar',
    'description' => 'This is a sample sidebar for bootstrap4 theme',
]);

add_shortcode('google-map', 'Google map', 'Custom map', function ($shortCode) {
    return Theme::partial('shortcodes.google-map', ['address' => $shortCode->content]);
});

add_shortcode('youtube-video', 'Youtube video', 'Add youtube video', function ($shortCode) {
    return Theme::partial('shortcodes.video', ['url' => $shortCode->content]);
});

add_shortcode('featured-posts', 'Featured posts', 'Featured posts', function () {
    return Theme::partial('shortcodes.featured-posts');
});

add_shortcode('category-posts', 'Category posts', 'Category posts', function () {
    return Theme::partial('shortcodes.category-posts');
});

add_shortcode('all-galleries', 'All Galleries', 'All Galleries', function () {
    return Theme::partial('shortcodes.all-galleries');
});

add_shortcode('contact-info', 'Contact Info', 'Contact Info', function(){
    return Theme::partial('shortcodes.contact-info');
});

shortcode()->setAdminConfig('google-map', Theme::partial('shortcodes.google-map-admin-config'));
shortcode()->setAdminConfig('youtube-video', Theme::partial('shortcodes.youtube-admin-config'));

theme_option()
    ->setArgs(['debug' => config('app.debug')])
    ->setField([
        'id'         => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'copyright',
            'value'   => __('© 2020 copyright'),
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 255,
            ],
        ],
        'helper'     => __('Copyright on footer of site'),
    ])
    ->setSection([
        'title'      => __('Social'),
        'desc'       => __('Social links'),
        'id'         => 'opt-text-subsection-social',
        'subsection' => true,
        'icon'       => 'fa fa-share-alt',
    ])
    ->setField([
        'id'         => 'facebook',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Facebook',
        'attributes' => [
            'name'    => 'facebook',
            'value'   => null,
            'options' => [
                'class'       => 'form-control',
                'placeholder' => 'https://facebook.com/@username',
            ],
        ],
    ])
    ->setField([
        'id'         => 'twitter',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Twitter',
        'attributes' => [
            'name'    => 'twitter',
            'value'   => null,
            'options' => [
                'class'       => 'form-control',
                'placeholder' => 'https://twitter.com/@username',
            ],
        ],
    ])
    ->setField([
        'id'         => 'youtube',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Youtube',
        'attributes' => [
            'name'    => 'youtube',
            'value'   => null,
            'options' => [
                'class'       => 'form-control',
                'placeholder' => 'https://youtube.com/@channel-url',
            ],
        ],
    ]);

function local_business()
{
    $logo = !empty(theme_option('logo')) ? url(theme_option('logo')) : Theme::asset()->url('img/logo.png');
    return '
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "LocalBusiness",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "' . setting('company_address_locality') . '",
                    "addressRegion": "' . setting('company_address_region') . '",
                    "postalCode":"' . setting('company_address_postcode') . '",
                    "streetAddress": "' . setting('company_address') . '"
                },
                "description": "' . setting('company_short_detail') . '",
                "name": "' . setting('company_name') . '",
                "telephone": "' . setting('company_phone') . '",
                "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 08:00-18:00",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "' . setting('company_map_lat') . '",
                    "longitude": "' . setting('company_map_long') .'"
                },
                "image": "' . $logo . '",
                "priceRange": "$30-$50"
            }
        </script>
    ';
}

function additional_meta($collection = null)
{
    $pagination = '';
    if ($collection) {
        $pagination = '';
        if ($collection->nextPageUrl()) {
            $pagination .= '<link rel="next" href="' . $collection->nextPageUrl() . '">';
        }
        if ($collection->previousPageUrl()) {
            $pagination .= '<link rel="prev" href="' . $collection->previousPageUrl() . '">';
        }
    }

    $canonical = null;
    $currentPage = request()->get('page');
    if ($currentPage) $canonical = url()->current() . '?page=' . $currentPage;

    $localBusiness = local_business();

    $additional_meta = [];
    if ($pagination) $additional_meta['pagination'] = $pagination;
    if ($canonical) $additional_meta['canonical'] = $canonical;
    if ($localBusiness) $additional_meta['local_business'] = $localBusiness;

    return $additional_meta;
}

function add_meta_pagination($screen, $object, $collection = null)
{
    $additional_meta = additional_meta($collection);
    view()->share( 'additional_meta', $additional_meta);
}

add_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, 'add_meta_pagination', 1, 3);

add_action('init', function () {
    config(['filesystems.disks.public.root' => public_path('storage')]);
}, 124);

RvMedia::addSize('featured', 560, 380)->addSize('medium', 540, 360);

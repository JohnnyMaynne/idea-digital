<?php


use App\Models\PostCategory;
use Tabuna\Breadcrumbs\Trail;


// home
Breadcrumbs::for('home', fn (Trail $trail) =>
    $trail->push('Home', route('home'))
);

// about us
Breadcrumbs::for('about-us', fn (Trail $trail) =>
    $trail
        ->parent('home')
        ->push('About us', route('about-us'))
);

// team
Breadcrumbs::for('team', fn (Trail $trail) =>
    $trail
        ->parent('home')
        ->push('Team', route('team'))
);


// testimonials
Breadcrumbs::for('testimonials', fn (Trail $trail) =>
    $trail
        ->parent('home')
        ->push('Testimonials', route('testimonials'))
);


// job
Breadcrumbs::for('job', fn (Trail $trail) =>
    $trail
        ->parent('home')
        ->push('Job', route('job'))
);

// blog
Breadcrumbs::for('blog', fn (Trail $trail) =>
    $trail
        ->parent('home')
        ->push('Blog', route('blog'))
);

// blog category
Breadcrumbs::for('blog.category', function (Trail $trail, string $slug) {
    $current = PostCategory::forSlug($slug)->first();

    $trail
        ->parent('blog')
        ->push($current->title, route('blog.category', ['slug' => $current->slug]));
});



// blog single
Breadcrumbs::for('blog.single', function (Trail $trail, string $slug) {
    $current = \App\Models\Post::forSlug($slug)->first();

    $trail
        ->parent('blog.category', $current->category->title)
        ->push($current->title, route('blog.single', ['slug' => $current->slug]));
});


// cases
Breadcrumbs::for('cases', fn (Trail $trail) =>
    $trail
         ->parent('home')
        ->push('Cases', route('cases'))
);


// cases
Breadcrumbs::for('contacts', fn (Trail $trail) =>
    $trail
         ->parent('home')
        ->push('Contacts', route('contacts'))
);

// cases
Breadcrumbs::for('seo', fn (Trail $trail) =>
    $trail
         ->parent('home')
        ->push('Seo service', route('seo'))
);

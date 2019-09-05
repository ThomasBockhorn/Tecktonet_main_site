<?php

//===================Admin Breadcrumbs===================================

//Dashboard
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Dashboard', route('admin'));
});

//adminProjects
Breadcrumbs::for('adminProjects.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('Projects', route('adminProjects.index'));
});

Breadcrumbs::for('adminProjects.create', function ($trail) {
    $trail->parent('adminProjects.index');
    $trail->push('Create', route('adminProjects.create'));
});

Breadcrumbs::for('adminProjects.update', function ($trail, $project) {
    $trail->parent('adminProjects.index');
    $trail->push('Update', route('adminProjects.update', $project->id));
});

Breadcrumbs::for('adminProjects.show', function ($trail, $project) {
    $trail->parent('adminProjects.index');
    $trail->push($project->title, route('adminProjects.show', $project->id));
});

Breadcrumbs::for('adminProjects.edit', function ($trail, $project) {
    $trail->parent('adminProjects.index');
    $trail->push($project->title, route('adminProjects.edit', $project->id));
});

//adminBlog
Breadcrumbs::for('adminBlog.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('Blog', route('adminBlog.index'));
});

Breadcrumbs::for('adminBlog.show', function ($trail, $post) {
    $trail->parent('adminBlog.index');
    $trail->push($post->title, route('adminBlog.show', $post->id));
});

Breadcrumbs::for('adminBlog.create', function ($trail) {
    $trail->parent('adminBlog.index');
    $trail->push('Create', route('adminBlog.create'));
});

Breadcrumbs::for('adminBlog.edit', function ($trail, $post) {
    $trail->parent('adminBlog.index');
    $trail->push($post->title, route('adminBlog.edit', $post->id));
});

//adminUsers
Breadcrumbs::for('adminUsers.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('Users', route('adminUsers.index'));
});

//adminContact
Breadcrumbs::for('adminContact.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('Contact', route('adminContact.index'));
});

Breadcrumbs::for('adminContact.show', function ($trail, $contact) {
    $trail->parent('adminContact.index');
    $trail->push($contact->name, route('adminContact.show', $contact->id));
});

//=====================Visitor Breadcrumbs=========================================
//visitor projects
Breadcrumbs::for('welcome', function ($trail) {
    $trail->push('Home', route('welcome'));
});

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('projects.index', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Projects', route('projects.index'));
});

Breadcrumbs::for('projects.show', function ($trail, $project) {
    $trail->parent('projects.index');
    $trail->push($project->title, route('projects.show', $project->id));
});

//Visitor blog
Breadcrumbs::for('blog.index', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Blog', route('blog.index'));
});

Breadcrumbs::for('blog.show', function ($trail, $post) {
    $trail->parent('blog.index');
    $trail->push($post->title, route('blog.show', $post->id));
});
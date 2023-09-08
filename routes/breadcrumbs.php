Breadcrumbs::register('contact', function($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Contact', route('contact'));
});

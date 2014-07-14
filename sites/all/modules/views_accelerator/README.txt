
VIEWS ACCELERATOR
=================
Analyses and accelerates the post-execution phase of non-cached Views. Targets
fields that require little formatting/rendering, e.g. fields that do not need to
be displayed with markup, prefixes or suffixes.
Examples are fields used in View-driven maps (Google, OpenLayers, Leaflet).
Not only will latitude and longitude fields benefit, but also any fields used
to populate tables or marker balloons and not requiring rich rendering.

INSTALLATION & CONFIGURATION
============================
0) Install like any other module.

1) To accelerate a View open the "Advanced" fieldset (upper right) on the Views
UI console. Under the header OTHER, you'll find an option "Caching". Click that.
A modal window appears with a new option "None. Post-execution optimized with
Views Accelerator". Select that option and press Save. Your view is now
accelerated.

2) You can compare the performance of the view with and without the accelerator
by switching on the summary statistics for selected users on the module's
configuration page.
Then open two browser windows and execute the same View once with and once
without this module's accelerated pseudo-cache. Compare and contrast.

CAVEATS
=======
Remember: Views Accelerator works by not fully rendering Views results, i.e.
it leaves the results pretty much in their raw form. If full rendering is
important to you, you'll find little benefit from this module.
You get the best benefits when:
o your view produces a lot of items (rows * columns)
o you don't have a pager or a pager with may items per page
o the raw data is more important than the rendered data
View-driven maps that cannot be cached are usually great beneficiaries.

May not work on all fields in your View. Fields currently supported are:
o general fields
o taxonomy terms
o images (public, produced in thumbnail format)
o files
o Geofields, drupal.org/project/geofield
o Address Fields,drupal.org/project/addressfield

BACKGROUND
==========
Profiling revealed that for some Views the largest part of the total execution
time was surprisingly spent in the view::_post_execute() function, rather than
the query execute() or view::render() functions. view::_post_execute() passes
control to views_handler_field_field::set_items() and this is where a lot of CPU
cycles are wasted, if all you're after are the raw database results.
The "Exclude from display" check box does not stop set_items() from being
executed.
This module replaces the set_items() function by a highly performant alternative
that simply returns the raw or near-raw data value without building render
arrays etc.

AUTHOR
======
Rik de Boer, flink.com.au, Melbourne, Australia.

<?php

/*
 * Define a few helper functions, to read Markdown files
 * and parse them to HTML...
 */

function read($translation, $path)
{
  return file_get_contents(
    App::make("path.base") . "/translation/{$translation}/manuscript/{$path}"
  );
}

function parse($markdown)
{
  $markdown = str_replace("{lang=php}", "", $markdown);
  $markdown = str_replace("A>", ">", $markdown);

  return Markdown::string($markdown);
}

/*
 * Define a few utility methods for formatting URLs
 */

function titleFromRoute($route)
{
  $route = trim($route, "/");
  $route = preg_replace("/[-]([a-z0-9])/", " $1", $route);
  $route = preg_replace("/([0-9]+)/", "$1: ", $route);

  return ucwords(trim($route, ":"));
}

/*
 * Define the English routes...
 */

$routes = [
  "/part-1-autoloading"           => "01-autoloading.md",
  "/part-2-application"           => "02-application.md",
  "/part-3-environments"          => "03-environments.md",
  "/part-4-start"                 => "04-start.md",
  "/part-5-configuration"         => "05-configuration.md",
  "/part-6-cleaning-up"           => "06-cleaning-up.md",
  "/part-7-request"               => "07-request.md",
  "/part-8-router"                => "08-router.md",
  "/part-9-route"                 => "09-route.md",
  "/part-10-response"             => "10-response.md",
  "/part-11-recap"                => "11-recap.md",
  "/part-12-basic-config"         => "12-basic-config.md",
  "/part-13-environmental-config" => "13-environmental-config.md",
  "/part-14-sessions"             => "14-sessions.md",
  "/part-15-laravel-5"             => "15-laravel-5.md"
];

Route::get("/", function () use ($routes) {
  $markdown = read("en", "00-introduction.md");
  $markup   = parse($markdown);

  return View::make("page/index", compact("markup", "routes") + ["prefix" => ""]);
});

foreach ($routes as $route => $path) {

  Route::get($route, function () use ($path, $routes) {
    $markdown = read("en", $path);
    $markup   = parse($markdown);

    return View::make("page/part", compact("markup", "routes") + ["prefix" => ""]);
  });

}

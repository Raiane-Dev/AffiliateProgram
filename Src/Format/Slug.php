<?php

    namespace Src\Format;

    final class Slug{

        public static function format(string $slug): string{
            $slug = preg_replace('/á|ã|à|â/', 'a', $slug);
            $slug = preg_replace('/õ|ô|ó/', 'o', $slug);
            $slug = preg_replace('/í|î|ì/', 'i', $slug);
            $slug = preg_replace('/ú|ù|û/', 'u', $slug);
            $slug = preg_replace('/é|ê|è/', 'e', $slug);
            $slug = mb_strtolower($slug);
            $slug = rtrim($slug, '.\*\!');

            return $slug;
        }

    }

?>
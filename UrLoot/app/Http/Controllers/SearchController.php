<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPost($userR)
    {
        $posts = DB::table('post')->get('title');

        foreach ($posts as $post) {
            if (strstr($post, $userR)){
                array_push($answer,$post);
            }
        }
        return $answer;

    }

    public function searchProfessor($userR)
    {
        $professorNames = DB::table('professor')->get('professorName');

        foreach ($professorNames as $pName) {
            if (strstr($pName, $userR)){
                array_push($answer,$pName);
            }
        }
        return $answer;

    }

    public function searchSubject($userR)
    {
        $subjects = DB::table('subject')->get('subjectName');

        foreach ($subjects as $subject) {
            if (strstr($subject, $userR)){
                array_push($answer,$subject);
            }
        }
        return $answer;

    }
}

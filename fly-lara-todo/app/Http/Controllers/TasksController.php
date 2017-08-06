<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @param \App\Project $project
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(Project $project)
		{
			return view('tasks.index', compact('project'));
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @param \App\Project $project
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create(Project $project)
		{
			return view('tasks.create', compact('project'));
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param \App\Project $project
		 * @param  \Illuminate\Http\Request  $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request, Project $project)
		{
				//
		}

		/**
		 * Display the specified resource.
		 *
		 * @param \App\Project $project
		 * @param  int  $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show(Project $project, Task $task)
		{
			return view('tasks.show', compact('project', 'task'));
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param \App\Project $project
		 * @param  int  $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit(Project $project, Task $task)
		{
			return view('tasks.edit', compact('project', 'task'));
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param \App\Project $project
		 * @param  int  $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, Project $project, Task $task)
		{
				//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param \App\Project $project
		 * @param  int  $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(Project $project, Task $task)
		{
				//
		}
}

#### web.php
```
Route::get('/', function () {
    print_r('This is our homepage!');
});
    
Route::get('/tasks', 'TasksController@tasks');
```

#### CLI
```
php artisan make:controller TasksController
```

#### TasksController.php
```
public function tasks()
{
    return json_encode([
        'tasks' => Task::visibleTo(Auth::user())->get(),
    ]);
}
```

#### AuthServiceProvider.php
```
Auth::setUser(User::where('email', 'a5mercuryhu@gmail.com')->first());
// Auth::setUser(User::where('email', 'bobbert@email.com')->first());
// Auth::setUser(User::where('email', 'coach@harding.edu')->first());
```

#### Task.php
```
public function scopeVisibleTo($query, User $user)
{
    if ($user->isSuper()) {
        return $query;
    }
    
    return $query->where('user_id', $user->id);
}
```

#### User.php
```
public function isSuper()
{
    return $this->is_super;
}
```

#### web.php
```
Route::post('/tasks/create', 'TasksController@create');
Route::post('/tasks/complete', 'TasksController@complete');
```

#### TasksController.php
```
public function create()
{
    $this->validate(request(), [
        'label' => 'required|string|max:48',
    ]);
    
    $task = Task::create([
        'user_id' => Auth::user()->id,
        'label' => request('label'),
    ]);
    
    return json_encode([
        'message' => "successfully created task',
    ]);
}
    
public function complete()
{
    $this->validate(request(), [
        'task_id' => 'required|integer|exists:tasks,id',
    ]);
    
    $task = Task::find(request('task_id');
    $task->update([
        'completed' => $task->completed ? null : Carbon::now(),
    ]);
    
    return json_encode([
        'message' => "successfully created task',
    ]);
}
```

import { Component, OnInit } from '@angular/core';
import { Todo } from '../../models/Todo';

@Component({
  selector: 'app-todos',
  templateUrl: './todos.component.html',
  styleUrls: ['./todos.component.css']
})
export class TodosComponent implements OnInit {
  //creating an array of todos
  todos:Todo[];
  input1:string = ""; 
  constructor() { }

  ngOnInit(): void {
    this.todos = [
      {
        header: 'Some Todo',
        
        completed: false,
      },
      {
        header: 'First Todo',
        
        completed: false,
      },
      {
        header: 'Second Todo',
        
        completed: false,
      },
    ]
  }

  toggleDone(id){
    this.todos.map((v, i) =>{
      if (i == id) 
      v.completed = !v.completed;
      return v;
    })
  }
  addTodo() {
    this.todos.push({
      header: this.input1,
      completed: false,
    });
    this.input1 = "";
  }
  toggleHide(){
    let searchCompleted = false;
    const todo = this.todos.filter(todo => todo.completed == false);
    return todo ;
  }
}

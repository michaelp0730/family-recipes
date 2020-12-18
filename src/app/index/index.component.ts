import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {
  searchVal = '';

  constructor() {}

  ngOnInit(): void {}

  onKey(event: any): void {
    this.searchVal = event.target.value.toLowerCase();
  }

  onReset(): void {
    this.searchVal = '';
  }
}

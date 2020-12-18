import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {
  date = new Date();
  year = 0;

  constructor() { }

  ngOnInit(): void {
    this.year = this.date.getFullYear();
  }

}

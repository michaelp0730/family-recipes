import { Component, Input, OnChanges, OnInit, SimpleChanges } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { IndexComponent } from '../index/index.component';

@Component({
  selector: 'app-recipes-section',
  templateUrl: './recipes-section.component.html',
  styleUrls: ['./recipes-section.component.css']
})
export class RecipesSectionComponent implements OnInit, OnChanges {
  @Input() searchValue: string;
  @Input() type: string;
  recipes: any = [];

  constructor(
    private httpClient: HttpClient,
  ) {
    this.searchValue = '';
    this.type = '';
  }

  ngOnInit(): void {
    this.getRecipes(this.type, '');
  }

  ngOnChanges(changes: SimpleChanges): void {
    const query = changes.searchValue;

    if (!query.isFirstChange()) {
      this.getRecipes(this.type, query.currentValue);
    }
  }

  getRecipes(typeSlug: string, query: string): void {
    this.httpClient.get(`assets/${typeSlug}.json`).subscribe(data => {
      this.recipes = data;

      if (query) {
        this.recipes = this.recipes.filter((recipe: {title: any}) => recipe.title.toLowerCase().indexOf(query) !== -1);
      }

      this.sortRecipes(this.recipes);
    });
  }

  sortRecipes(recipesCollection: any[]): void {
    recipesCollection.sort((a, b) => a.title > b.title ? 1 : -1);
  }
}

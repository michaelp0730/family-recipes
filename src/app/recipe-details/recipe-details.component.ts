import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-recipe-details',
  templateUrl: './recipe-details.component.html',
  styleUrls: ['./recipe-details.component.css']
})
export class RecipeDetailsComponent implements OnInit {
  type: any = '';
  slug: any = '';
  recipes: any = [];
  recipe: any = {};
  titleFirstWord: any = '';
  titleRemainder: any = '';
  instructionsArr: any = [];

  constructor(
    private httpClient: HttpClient,
    private route: ActivatedRoute,
  ) {
    this.recipe = {};
  }

  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
      this.type = params.get('recipeType');
      this.slug = params.get('slug');
    });

    this.httpClient.get(`assets/${this.type}.json`).subscribe(data => {
      this.recipes = data;
      this.recipe = this.recipes.filter((n: { slug: any; }) => n.slug === this.slug)[0];
      const titleArr = this.recipe.title.split(' ');
      this.titleFirstWord = titleArr.shift();
      this.titleRemainder = titleArr.join(' ');
      this.instructionsArr = this.recipe.instructions.split('##');
    });
  }
}

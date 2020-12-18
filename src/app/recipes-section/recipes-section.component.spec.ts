import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RecipesSectionComponent } from './recipes-section.component';

describe('RecipeComponent', () => {
  let component: RecipesSectionComponent;
  let fixture: ComponentFixture<RecipesSectionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ RecipesSectionComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(RecipesSectionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });
});

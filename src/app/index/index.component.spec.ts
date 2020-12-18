import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexComponent } from './index.component';

describe('IndexComponent', () => {
  let component: IndexComponent;
  let fixture: ComponentFixture<IndexComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ IndexComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(IndexComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  it('should render h1 text', () => {
    const compiled = fixture.nativeElement;
    expect(compiled.querySelector('h1').textContent).toContain('Family Recipes');
  });

  it('should render subheading text', () => {
    const compiled = fixture.nativeElement;
    expect(compiled.querySelector('.index-subheading').textContent).toContain('recipes');
  });

  it('should render search form', () => {
    const compiled = fixture.nativeElement;
    expect(compiled.querySelector('#recipes-search-form').textContent).toContain('Search recipes:');
  });
});

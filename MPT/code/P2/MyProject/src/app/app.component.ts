import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet,FormsModule],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'Manthan';
  isDisable = false;
  click = false;

  onClick() {
    if (this.click == false) {
      this.title = "You Clink the button";
      this.click = true;
    }
    else{
      this.title = "Manthan";
      this.click = false;
    }
  }
}

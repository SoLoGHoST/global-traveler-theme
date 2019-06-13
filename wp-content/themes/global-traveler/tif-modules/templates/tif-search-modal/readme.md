# Description
Adds a modal for searching.

# How to Use
Just add the following 2 REQUIRED attributes and values to any element in order to call this Modal:

1. data-toggle="modal"
2. data-target="#tif-search-modal"

Optional Attributes (depending on your needs) are as follows:

1. data-backdrop="static"
2. data-keyboard="false"

# Usuage Example

Should be called within the *footer.php* file within the theme.  Since there is no body or footer content in the modal, currently there doesn't need to be anything passed into the 2nd parameter array...

```php

tif_get_template(tif_template_path('tif-search-modal'), array());

```

# Just Add Fonts

You will just need to add your fonts used in the themes main style.scss file, example:

```css

.tif-search-modal {
	.modal-dialog {
		.modal-header {
			// background-color: $topline-back;
			.close {
				@include arno(regular);
			}
			input {
				&[type="text"] {
					@include sophia(regular);
				}
			}
		}
	}
	.form-wrapper {
		span {
			@include sophia(regular);
		}
	}
}

```


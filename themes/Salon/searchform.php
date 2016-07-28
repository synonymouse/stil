				<form method="get" action="./">
					<input class="searchText" type=text name="s" id="s" placeholder="Введите слово или фразу" value="<?php the_search_query(); ?>" />
					<input class="searchSubmit" type=submit value="Искать" />
				</form>
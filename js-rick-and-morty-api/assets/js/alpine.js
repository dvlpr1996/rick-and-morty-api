function getCharacters() {
	return {
		url: null,
		page: '1',
		characters: null,
		fetchStatus: '',
		init() {
			this.fetchData();
			this.$watch('page', () => {
				this.fetchData();
			});
		},
		fetchData() {
			this.fetchStatus = 'loading',
				fetch(`https://rickandmortyapi.com/api/character/?page=${this.page}`)
					.then(res => {
						if (!res.ok) {
							this.fetchStatus = 'error';
						}
						return res.json();
					})
					.then(data => {
						this.fetchStatus = "success";
						this.characters = data.results;
					})
					.catch(error => {
						this.fetchStatus = 'error';
					})
		},
		previousPage() {
			if (this.page > 0) this.page--;
		},
		nextPage() {
			if (this.page < 42) this.page++;
		},
		link(id) {
			this.url = 'character.html?char=' + id;
		}
	}
}

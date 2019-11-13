(function() {
    const search = instantsearch({
        appId: '6BXESBBMBK',
        apiKey: '7af0cd503f72416eae1adc8beea0dcf1',
        indexName: 'products',
        urlSync: true
    });

    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits',
            templates: {
                empty: 'Nenhum resultado encontrado',
                item: function(item) {
                    return `
                        <a href="${window.location.origin}/shop/${item.slug}">
                            <div class="instantsearch-result">
                                <div>
                                    <img src="${window.location.origin}/storage/${item.image}" alt="img" class="algolia-thumb-result">
                                </div>
                                <div>
                                    <div class="result-title">
                                        ${item._highlightResult.name.value}
                                    </div>
                                    <div class="result-details">
                                        ${item._highlightResult.details.value}
                                    </div>
                                    <div class="result-price">
                                        R$&nbsp${(item.price).toFixed(2)}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <hr>
                    `;
                }
            }
        })
    );

    // initialize SearchBox
    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#search-box',
            placeholder: 'Digite o que você procura...'
        })
    );

    // initialize pagination
    search.addWidget(
        instantsearch.widgets.pagination({
            container: '#pagination',
            maxPages: 20,
            // default is to scroll to 'body', here we disable this behavior
            scrollTo: false
        })
    );

    search.addWidget(
        instantsearch.widgets.stats({
            container: '#stats-container',
            templates: {
                body: "{{#hasManyResults}}{{nbHits}} Produtos{{/hasManyResults}}{{#hasOneResult}}1 Produto{{/hasOneResult}}{{#hasNoResults}}Nenhum produto.{{/hasNoResults}}"
            }
        })
    );

    // initialize RefinementList
    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#refinement-list',
            attributeName: 'categories',
            sortBy: ['name:asc']
        })
    );

    search.start();
})();
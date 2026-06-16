(() => {
  const renderStyles = () => {
    const stylesheet = document.createElement('style');
    const sheet = stylesheet.sheet;
    document.head.appendChild(stylesheet);

    cm.addCSSRule(sheet, '.pt__grid--search-database > ul', [
      'align-items: stretch',
      'grid-template-columns: repeat(3, 1fr)',
    ]);
    cm.addCSSRule(sheet, '.pt__grid--search-database .pt__box', [
      'min-height: 100%',
      'padding: 24px',
    ]);
    cm.addCSSRule(sheet, '.pt__grid--search-database .pt__box h5', [
      'margin-bottom: 25px',
      'font-size: 22px',
      'line-height: 28px',
      'color: rgb(221, 63, 106)',
    ]);
    cm.addCSSRule(sheet, '.pt__grid--search-database .pt__box dl:not(:last-child)', [
      'margin-bottom: 12px',
    ]);
    cm.addCSSRule(sheet, '.pt__grid--search-database .pt__box dt', [
      'line-height: 18px',
      'font-size: 12px',
      'color: #757575',
    ]);
    cm.addCSSRule(sheet, '.pt__grid--search-database .pt__box dd', [
      'line-height: 24px',
    ]);
  }

  const getData = ( table ) => {
    const titles = Array.from( table.querySelectorAll( 'thead td' ) )
      .map( node => node.textContent );

    const items = Array.from( table.querySelectorAll( 'tbody tr' ) )
      .map( container => {
        return Array.from( container.querySelectorAll( 'td' ) )
          .map( node => node.innerHTML );
      } );

    return { titles, items };
  }

  const renderCards = ( data ) => {
    const nodes = {};

    nodes.container = cm.node( 'div', { classes: ['pt__grid', 'pt__grid--search-database', 'is-grid'] },
      nodes.holder = cm.node( 'ul' ),
    );

    cm.forEach( data.items, item => renderCard( [ ...data.titles ], item, nodes.holder ) );

    cm.insertAfter( nodes.container, table );
  }

  const renderCard = ( titles, data, container ) => {
    const nodes = {};
    const title = titles.shift();
    const name = data.shift();

    nodes.container = cm.node( 'li',
      cm.node( 'div', { classes: 'pt__box' },
        cm.node( 'h5', { innerHTML: name }, ),
        nodes.holder = cm.node( 'div', { classes: 'pt__box-info' } )
      )
    );

    cm.forEach( data, ( field, index ) => renderCardField( titles[index], field, nodes.holder ) );

    cm.appendChild( nodes.container, container );
  }

  const renderCardField = ( title, value, container ) => {
    const nodes = {};

    nodes.container = cm.node( 'dl',
      cm.node( 'dt', { innerHTML: title } ),
      cm.node( 'dd', { innerHTML: value } )
    );

    cm.appendChild( nodes.container, container );
  }

  const table = document.querySelector( '.tpl_table-theme' );
  if ( !table ) return;

  const data = getData( table );
  renderStyles();
  renderCards( data );
  cm.remove( table );
} ) ();
class CreateAlbums < ActiveRecord::Migration
  def change
    create_table :albums do |t|
      t.integer :album_id
      t.string :title
      t.string :artist
      t.text :url
      t.integer :release_date
      t.integer :downloadable
      t.text :large_art_url
      t.text :small_art_url

      t.timestamps
    end
  end
end

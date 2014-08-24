class CreateTracks < ActiveRecord::Migration
  def change
    create_table :tracks do |t|
      t.integer :track_id
      t.integer :album_id
      t.string :title
      t.string :artist
      t.decimal :duration
      t.text :url
      t.text :streaming_url

      t.timestamps
    end
  end
end

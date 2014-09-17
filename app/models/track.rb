class Track < ActiveRecord::Base
  belongs_to :album,
    foreign_key: "album_id"
end

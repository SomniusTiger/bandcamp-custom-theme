class Album < ActiveRecord::Base
  has_many :tracks, 
    primary_key: "album_id"
end
